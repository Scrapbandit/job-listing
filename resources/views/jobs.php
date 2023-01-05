<h1><?php echo $heading; ?></h1>
<?php foreach ($jobs as $job) : ?>
    <h2>
        <a href="/jobs/job['id']"><?php echo $job['title']; ?>
        </a>
    </h2>
    <p><?php echo $job['description']; ?></p>
<?php endforeach; ?>