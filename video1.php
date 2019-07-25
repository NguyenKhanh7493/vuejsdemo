<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<div id="obj">
    <input type="text" v-on:input="changeValue">
    <p>{{ noidung }}</p>
</div>

<script>
    new Vue({
        el:'#obj',
        data:{
            noidung:'Khánh gắng học đi,sau ni sướng'
        },
        methods: {
            changeValue: function(event) {
                // Bình thường ta truy cập đối tượng ta truy cập luôn vào value
                // Do chưa biết đối tượng nào nên phải sử dụng target truy cập vào đối tượng có chứa hàm chỉ thị
                this.noidung = event.target.value;
            }
        }
    });
</script>