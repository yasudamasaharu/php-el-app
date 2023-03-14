<!DOCTYPE html>
<html lang="ja">
<head>
    <?php require("_head_view.php") ?>
</head>
<body>
    <?php require("_header_view.php"); ?>
    <main class="container py-4">
        <div class="row mt-3">
            <div class="col-12">
                <h3>Sections</h3>
                <hr>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <img src="imgs/courses/<?= h($course['id'])?>.png" alt="course image">
                    <div class="card-body">
                        <h5 class="card-title"><?= h($course['course_title']) ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= h($course['category_title'])?></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($sections as $section) {?>
                            <li class="list-group-item">
                                <a href="detail.php?course_id=<?= h($course["id"])?>&section_id=<?= h($section['id'])?>">Section <?= h($section['no']) ?><?= h($section["title"]) ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 mb-4">
                <video src="<?= htmlSP($current_section["url"]) ?>" 
                    playsinline controls class="section-video"></video>
                <hr>
                <h5 class="my-4"><?= h($course['course_title']) ?> - Section <?= h($current_section['no']) ?> : <?= h($current_section["title"])?></h5>
            </div>
        </div>
    </main>
    <?php require("_footer_view.php"); ?>
</body>
</html>