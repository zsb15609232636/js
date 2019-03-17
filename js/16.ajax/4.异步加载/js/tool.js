function loadScript(url,callback) {
    var script = document.createElement('script')
    script.type='text/javascript'
    // 非IE
    if(script.readyState){
        // ie
        script.onreadystatechange=function () {
            if (script.readyState='complete' || script.readyState=='loaded'){
                callback();
            }
        }
    }else{
        // 非ie
        script.onload=function () {
            callback()
        }
    }
    script.src=url;
    document.head.appendChild(script)
}
