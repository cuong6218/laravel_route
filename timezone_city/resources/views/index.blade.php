<div class="main-content">
    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
    <label for="select-city">
        <select id="select-city">
            <option>Chọn thành phố</option>
            <option value="America-Chihuahua">Chihuahua, Mexico</option>
            <option value="America-Costa_Rica">Costa Rica</option>
            <option value="America-Havana">Havana</option>
            <option value="America-Hong_Kong">Hồng Kông</option>
            <option value="America-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
        </select>
    </label>
</div>

<script>
    document.getElementById("select-city").onchange = function (){
        ChooseCity()
    };
    function ChooseCity(){
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>