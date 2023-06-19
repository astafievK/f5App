$(document).ready(function (){
    $.ajax({
        url: "scripts/ajax.php",
        dataType: 'json',
        error: function (XMLHttpRequest, textStatus, errorThrown){
            console.log(XMLHttpRequest);
        }
    })
    .done(function (data){
        data.forEach(item =>{
            $('.row').append(renderProduct(item))
        })
    })
})

function renderProduct(item){
    return `<div class="card-wrapper col-xl-4 col-sm-6">
            <div class="card" data-id="${item.idProduct}" style="background-image: url('../../assets/images/catalog/${item.image}');">
                <div class="spoiler">
                    <div class="spoiler-content">
                        <span class="articul">Артикул: ${item.idProduct}</span>
                        <span class="price">${item.price} ₽</span>
                        <span class="title">${item.title}</span>
                        <span class="description">${item.description}</span>
                        <button class="buy" type="submit" name="buy">Приобрести</button>
                    </div>
                </div>
            </div>
        </div>`
}