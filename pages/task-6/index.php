<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 6 </h1>
            <p>In Javascript and html5, write a simple web form that has a text field that is labeled "new button text" button that says, "Click Me". When you click the button, it should change the button's internal text to say whatever was in the text input above.</p>
        </div>
    </div>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">

            <div class="row">

                <div class="col-6">
                    <div class="card card-default">
                            <div class="card-header">Javascript Code</div>
                            <div class="card-body">
                                <code>
                    <pre>function changeMe(){
    let new_text = 'Click Me';
    if (document.getElementById('newButtonText').value != ''){
        new_text = document.getElementById('newButtonText').value;
    }
    document.getElementById('goodOlFormButton').innerText=new_text;
    return false;
}</pre>
                                </code>
                            </div>
                        </div>
                </div>

                <div class="col-6">
                    <form id="newButtonTextForm" onsubmit="return changeMe();" class="p-3">
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