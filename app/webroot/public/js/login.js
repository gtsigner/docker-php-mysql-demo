var ss = new Vue({
    el: '#login',
    data: function () {
        return {
            username: '',
            password: '',

        }
    },
    created: function () {
        console.log("login");
    },
    methods: {
        login: function () {
            $.post("./server/login_m.php", {username: ss.username, password: ss.password}, function (ret) {
                if (ret.code === 200) {
                    window.location.href = "./admin.php";
                } else {
                    alert(ret.msg);
                }
            });
        }
    }

});







