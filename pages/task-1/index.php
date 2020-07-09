<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 1 </h1>
            <p>Write an executable php script that does the following: Cycle through the numbers 3 through 103. When the current number can be evenly divided by 3, display the word "three". When the current number can be evenly divided by 5, display the word "five". When the current number can be divided evenly by both 3 and 5, display the words "both three and five". If the current number isn’t divisible by either, output the number itself. Each output should be on its own line.</p>
        </div>
    </div>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsePre" aria-expanded="true" aria-controls="collapsePre">Show Code</button>

            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseRun" aria-expanded="false" aria-controls="collapseRun">Run Code</button>
        </p>

        <div class="mb-5">
            <div class="collapse multi-collapse" id="collapseRun">
                <div id="iteratorView">
                    <div class="card card-default">
                        <div class="card-header">PHP Iterator Output</div>
                        <div class="card-body">
                            <?php include ('../../php/lib/iterator.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse multi-collapse" id="collapsePre">
                <div class="card card-default">
                    <div class="card-header">PHP Code</div>
                    <div class="card-body">
                        <code>
                    <pre>
    $numbers = range(3, 103);

    foreach ($numbers as $number) {
       echo "#{$number}: ";
       if ($number % 3 == 0 && $number % 5 == 0) {
           echo "both three and five";
           continue;
       } elseif ($number % 5 == 0 ){
           echo "five";
       } elseif ($number % 3 == 0){
           echo "three";
       } else {
           echo "{$number}";
       }
    }
                    </pre>
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../../php/inc/footer.php' ; ?>