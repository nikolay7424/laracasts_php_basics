<?php require 'partials/head.php' ?>

<h1>All users</h1>
<br>

<?php foreach ($users as $user) {
        echo "<li>$user->name</li>";
    }; ?>

<h1>Submit your name</h1>

<form method="post">
    <input name="name">
    <button type="submit">Submit</button>
</form>
<?php require 'partials/footer.php' ?>