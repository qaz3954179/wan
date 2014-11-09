(function(window) {
    function success_callback(pos) {
        var lat = pos.coords.latitude;
        var lng = pos.coords.longitude;

        addCookie('geo_lat', lat);
        addCookie('geo_lng', lng);
        //alert(lat + ',' + lng);
        window.location.href = '/';
    }

    function fail_callback(err) {
        alert(err.message);
        //debugger;
    }
    function addCookie(name,value,expireHours){
            var cookieString=name+"="+escape(value);
            //判断是否设置过期时间
            if(expireHours>0){
                var date=new Date();
                date.setTime(date.getTime+expireHours*3600*1000);
                cookieString=cookieString+"; expire="+date.toGMTString();
            }
            document.cookie=cookieString;
    }

    function getCookie(name){
        var strCookie=document.cookie;
        var arrCookie=strCookie.split("; ");
        for(var i=0;i<arrCookie.length;i++){
            var arr=arrCookie[i].split("=");
            if(arr[0]==name)return arr[1];
        }
        return "";
    }

    function hasCookie() {
        if (getCookie('cook_lng') && getCookie('cook_lat')) {
            return true;
        } else {
            return false;
        }
    }

    if (window.navigator && window.navigator.geolocation && !hasCookie()) {
        //addCookie('geo_lat', 39.789524);
        //addCookie('geo_lng', 116.331862);
        var geo = window.navigator.geolocation;
        geo.getCurrentPosition(success_callback, fail_callback);
    }
})(window);