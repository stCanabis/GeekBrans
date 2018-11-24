function testPost() {
    let btn = document.getElementById('formBtn');
    btn.onclick = function () {
        let text = document.getElementById('textInput').value;
        let text2 = document.getElementById('textInput2').value;
        let xhr = new XMLHttpRequest();
        let body = "name= "+text+ "&suname= " + text2;
        xhr.open("POST", "post.php",true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(body);
    }

    let containerH;
    let containerW;
    let blokH = $(".map");
    let blokW;
    let blokPos;

    $(document).ready(function (e) {

        blokH.css({"height": function () {
           return $('.mapContainer').innerHeight() - 50 + 'px';
        }, "width": function () {
                return $('.mapContainer').innerWidth() - 50 + 'px';
            },
        });



    })






}

testPost();
