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
        register: function (e) {
            e.preventDefault();
            if (ss.username == "" || ss.password == "") {
                alert("检查数据的完整性");
                return;
            }


            $.post("./register_m.php", {
                username: ss.username,
                password: ss.password
            }, function (response) {
                alert("注册成功");
            });


        },
        login: function (e) {
            e.preventDefault();
            if (ss.username == "" || ss.password == "") {
                alert("检查数据的完整性");
                return;
            }

            $.post("./server/login_m.php", {username: ss.username, password: ss.password}, function (res) {
                if (res.code === 200) {
                    window.location.href = "./admin.php";
                } else {
                    alert(ret.msg);
                }
            });
        }
    }

});







