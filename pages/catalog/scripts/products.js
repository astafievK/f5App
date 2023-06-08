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
            <div class="card" style="background-image: url('../../assets/images/catalog/${item.image}');" data-image='${item.image}' data-title='${item.title}' data-price='${item.price}' data-description='${item.description}'>
                <div class="spoiler">
                    <div class="spoiler-content">
                        <span class="price">${item.price} ₽</span>
                        <span class="title">${item.title}</span>
                        <span class="description">${item.description}</span>
                    </div>
                </div>
            </div>
        </div>`
}