// jQuery shizz
$('.multi-collapse').on('show.bs.collapse', function () {
    $('.multi-collapse').collapse('hide');
});

$(function(){
    let current = location.pathname;
    $('a.nav-link').each(function(){
        let $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
})

// Vue shizz
if(window.location.href.indexOf('task-5') > -1){
    new Vue({
        el: "#vapp",
        data: {}
    });
}

// Old school bleah...
function changeMe(){
    let new_text = 'Click Me';
    if (document.getElementById('newButtonText').value != ''){
        new_text = document.getElementById('newButtonText').value;
    }
    document.getElementById('goodOlFormButton').innerText=new_text;
    return false;
}

function changeCSS(){
    let css = `#newButtonTextForm { 
                 background-color: #5000b8; 
                 color: white;
               }
               #newButtonText { 
                 background-color: white;
                 border-color:white;
               }
               .form-group label { color: white; }
               .btn-info, .btn-info:hover,
               .btn-info:active, .btn-info:focus,
               .btn-info:not(:disabled):not(.disabled):active{ 
                 background-color: white;
                 color:#5000B8;
                 font-size: 12px;
                 border-color:#5000B8;
               }`,
        head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style'),
        new_text = 'Click Me';

    if (document.getElementById('newButtonText').value != ''){
        new_text = document.getElementById('newButtonText').value;
        head.appendChild(style);
        style.appendChild(document.createTextNode(css));
    }
    document.getElementById('goodOlFormButton').innerText=new_text;
    return false;
}
