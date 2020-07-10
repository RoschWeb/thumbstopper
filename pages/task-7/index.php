<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 7</h1>
            <p>Using your form from question 6, Create CSS to change the look of your form utilizing​ our corporate colors. This stylesheet must include reference to . and #. Share the new form and style sheet.</p>
        </div>
    </div>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">

            <div class="row mb-5">

                <div class="col-6">
                    <div class="card card-default">
                        <div class="card-header">Javascript Code</div>
                        <div class="card-body">
                            <code>
                    <pre>function changeCSS(){
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
</pre>
                            </code>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <form id="newButtonTextForm" onsubmit="return changeCSS();" class="p-3">
                        <div class="form-group">
                            <label for="newButtonText">New Button Text</label>
                            <input type="text" class="form-control" id="newButtonText" aria-describedby="textHelp" placeholder="new button text">
                        </div>
                        <button type="submit" id="goodOlFormButton" class="btn btn-info">Click Me</button>
                    </form>
                </div>

            </div>


        </div>
    </main>

<?php include '../../php/inc/footer.php' ; ?>