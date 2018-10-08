function createProduct() {
    $("#prodcutDetail").modal();
};

$("#saveOrder").click(function (e) {
    e.preventDefault();
    var object = JSON.stringify(
        {
            'ProductCode': 'SP01',
            'ProductName': 'Quan Jean MABU',
            'CategoryId': 1,
            'SupplierId': 1,
            'Price': 450000,
            'Img': '/avatar5.png',
            'Descriptions':'Jean coton'
        });
    $.ajax({
        contentType: 'application/json',
        dataType: 'json',
        url: '/Product/ProductIns',
        type: 'POST',
        data: object,
        success: function (result) {
            alert(result);
        },
        error: function () {
            alert("Error");
        }
    });
});

$("").click(function(e){
    e.preventDefault();
    var row = this.get
    var data = document.getElementById("").eval();
});