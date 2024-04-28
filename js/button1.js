var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img");
        img.src = 'https://tehnografi.com/wp-content/uploads/2021/09/Уязвимость-в-облаке-Microsoft-Azure-это-худшее-что-вы.jpgc';
        document.getElementById("demo").appendChild(img);
    }
}
