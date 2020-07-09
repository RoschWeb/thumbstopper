<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 3 </h1>
            <p>Now, take your output from question 2. Assume that there are multiple users per client. Display the "number of users" and "client name" for each client.</p>
        </div>
    </div>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">

            <p>To get the number of users a client has, we can use the following query:</p>
            <div class="card bg-light p-2 mb-3">
                <pre class="results">SELECT count(users.id) as "number of users", clients.name as "client name" FROM clients, users
WHERE users.client_id = clients.id
GROUP BY clients.name;</pre>
            </div>

            <p>which will produce</p>
            <div class="card bg-light p-2 mb-3">
<pre class="results">| number of users | client name |
|-----------------|-------------|
|               2 |        Phil |
|               3 |    Jennifer |
|               3 |        Paul |
|               2 |        Sara |
        </pre>
            </div>

        </div>
    </main>

<?php include '../../php/inc/footer.php' ; ?>