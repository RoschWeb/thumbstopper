<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 5 </h1>
            <p>Your job is to show a list of numbers 1 - 10. If you wanted to put these names in span tags, how would you write this in Vue (preferred) / react / similar?</p>
        </div>
    </div>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div id="vapp">
                <ul class="list-inline">
                    <li class="list-inline-item" v-for="num in 10">
                        <span>{{num}}</span>
                    </li>
                </ul>
            </div>

            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseJS" aria-expanded="true" aria-controls="collapseJS">Show Javascript</button>

                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseMU" aria-expanded="false" aria-controls="collapseMU">Show Markup</button>
            </p>

            <div class="mb-5">
                <div class="collapse multi-collapse" id="collapseJS">
                    <div class="card card-default">
                        <div class="card-header">VUE Javascript code</div>
                        <div class="card-body">
                            <code>
                                <pre class="text-primary">new Vue({
    el: "#vapp",
    data: {}
});</pre>
                            </code>
                        </div>
                    </div>
                </div>
                <div class="collapse multi-collapse" id="collapseMU">
                    <div class="card card-default">
                        <div class="card-header">HTML Markup</div>
                        <div class="card-body">
                            <code>
                    <pre>
 &lt;div id=&quot;vapp&quot;&gt;
 &nbsp;&nbsp;&lt;ul class=&quot;list-inline&quot;&gt;
 &nbsp;&nbsp;&nbsp;&nbsp;&lt;li class=&quot;list-inline-item&quot; v-for=&quot;num in 10&quot;&gt;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;{{num}}&lt;/span&gt;
 &nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
 &nbsp;&nbsp;&lt;/ul&gt;
 &lt;/div&gt;</pre>
                            </code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include '../../php/inc/footer.php' ; ?>