// [注]css选择器

function $(vArg){
    //  对参数进行区分
    switch (vArg[0]) {
        case '#'://id
            return document.getElementById(vArg.substring(1));
            break;
        case '.'://className
            return elementByClassName(document,vArg.substring(1))
            break;
        default:
            //对参数的前五个字符 进行判断
            var str =vArg.substring(0,5);
            if (str=='name='){
                return document.getElementsByName(vArg.substring(5))
            }else {
                return document.getElementsByTagName(vArg)
            }
            break;
    }
}

// 封装函数，解决getElementsByClassName() 低版本不支持问题
function elementByClassName(parent,classStr){
    var nodes = parent.getElementsByTagName('*')
    var result = []//用记录符合条件的元素节点
    for(var i=0;i<nodes.length;i++){
        if(nodes[i].className==classStr){
            result.push(nodes[i]);
        }
    }
    return result
}
