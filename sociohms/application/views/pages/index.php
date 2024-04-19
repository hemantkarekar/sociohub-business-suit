<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= $page['title'] ?></title>
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <?php for ($i = 0; $i < count($page['master']); $i++) : ?>
                        <div class="col-md-6">
                            <?php if (count($page['master'][$i]['items']) != 0) : ?>
                                <div class="title">
                                    <h3><?= $page['master'][$i]['cat_title'] ?></h3>
                                </div>
                            <?php endif ?>
                            <div class="menu">
                                <ul>
                                    <?php for ($j = 0; $j < count($page['master'][$i]['items']); $j++) : ?>
                                        <li>
                                            <div class="menu-item d-flex justify-content-between">
                                                <div class="item">
                                                    <h5><?= $page['master'][$i]['items'][$j]['item_title'] ?></h5>
                                                    <p><?= $page['master'][$i]['items'][$j]['item_description'] ?></p>
                                                </div>
                                                <div class="price">
                                                    <h5>&dollar;&nbsp;<?= $page['master'][$i]['items'][$j]['item_price'] ?>.00</h5>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endfor ?>
                                </ul>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view('components/_common_js') ?>
</body>

</html>