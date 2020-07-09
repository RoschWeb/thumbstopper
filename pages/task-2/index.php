<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 2 </h1>
            <p>Write a Postgres SQL query that takes the data from 2 tables and outputs "user’s name", "user’s id" and "user’s client name". The tables are named "users" and "clients". "users" contains the columns id, name, password, username, client_id as columns. clients contains id, name, address, city, state, zip_code. Each column of the output should be properly labeled as indicated in the initial request.</p>
        </div>
    </div>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">

            <p>Given the table users</p>
            <div class="card bg-light p-2 mb-3">
                <pre class="results">INSERT INTO clients (name, address, city, state, zip) VALUES
('Paul','666 Elm St', 'Boston', 'MA','12345'),
('Phil','667 Elm St', 'Boston', 'MA','12345'),
('Jennifer','668 Elm St', 'Boston', 'MA','12345'),
('Sara','669 Elm St', 'Boston', 'MA','12345');</pre>
            </div>

            <p>Given the table clients</p>
            <div class="card bg-light p-2 mb-3">
                <pre class="results">INSERT INTO users (name, password, username, client_id) VALUES
  ('Mike','!QAZxsw2', 'mclowe', 2),
  ('Rob','!QAZxsw2', 'ralfonso', 3),
  ('Roddy','!QAZxsw2', 'rpiper', 2),
  ('Mike T','!QAZxsw2', 'bookert', 1),
  ('Dwayne','!QAZxsw2', 'therock', 1),
  ('Hunter','!QAZxsw2', 'tripleh', 3),
  ('Terri','!QAZxsw2', 'hhogan', 4),
  ('Mick','!QAZxsw2', 'mfoley', 3),
  ('Socko','!QAZxsw2', 'creepy', 4),
  ('Paige','!QAZxsw2', 'saraya', 1);</pre>
            </div>

            <p>Simple SELECT queries such as</p>
            <div class="card bg-light p-2 mb-3">
                <pre class="results">SELECT * FROM users;</pre>
            </div>

            <p>and</p>
            <div class="card bg-light p-2 mb-3">
                <pre class="results">SELECT * FROM clients;</pre>
            </div>

            <p>will produce</p>
            <div class="card bg-light p-2 mb-3">
<pre class="results">| id |   name | password | username | client_id |
|----|--------|----------|----------|-----------|
|  1 |   Mike | !QAZxsw2 |   mclowe |         2 |
|  2 |    Rob | !QAZxsw2 | ralfonso |         3 |
|  3 |  Roddy | !QAZxsw2 |   rpiper |         2 |
|  4 | Mike T | !QAZxsw2 |  bookert |         1 |
|  5 | Dwayne | !QAZxsw2 |  therock |         1 |
|  6 | Hunter | !QAZxsw2 |  tripleh |         3 |
|  7 |  Terri | !QAZxsw2 |   hhogan |         4 |
|  8 |   Mick | !QAZxsw2 |   mfoley |         3 |
|  9 |  Socko | !QAZxsw2 |   creepy |         4 |
| 10 |  Paige | !QAZxsw2 |   saraya |         1 |
</pre><br/>

                <pre class="results">| id |     name |    address |   city | state |   zip |
|----|----------|------------|--------|-------|-------|
|  1 |     Paul | 666 Elm St | Boston |    MA | 12345 |
|  2 |     Phil | 667 Elm St | Boston |    MA | 12345 |
|  3 | Jennifer | 668 Elm St | Boston |    MA | 12345 |
|  4 |     Sara | 669 Elm St | Boston |    MA | 12345 |
        </pre>
            </div>

            <p>To get the correlating data from both tables we can run the following query</p>
            <div class="card bg-light p-2 mb-3">
                <pre class="results">SELECT users.name as "user's name", users.id as "user's id", clients.name as "user's client name"
FROM users, clients
WHERE users.client_id = clients.id;</pre>
            </div>

            <p>which will produce</p>
            <div class="card bg-light p-2 mb-3">
<pre class="results">| user's name | user's id | user's client name |
|-------------|-----------|--------------------|
|        Mike |         1 |               Phil |
|         Rob |         2 |           Jennifer |
|       Roddy |         3 |               Phil |
|      Mike T |         4 |               Paul |
|      Dwayne |         5 |               Paul |
|      Hunter |         6 |           Jennifer |
|       Terri |         7 |               Sara |
|        Mick |         8 |           Jennifer |
|       Socko |         9 |               Sara |
|       Paige |        10 |               Paul |
        </pre>
            </div>

        </div>
    </main>

<?php include '../../php/inc/footer.php' ; ?>