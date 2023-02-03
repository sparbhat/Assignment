<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rating $rating
 */
?>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rating'), ['action' => 'edit', $rating->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rating'), ['action' => 'delete', $rating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rating->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ratings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rating'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ratings view content">
            <h3><?= h($rating->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $rating->has('user') ? $this->Html->link($rating->user->id, ['controller' => 'Users', 'action' => 'view', $rating->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Car') ?></th>
                    <td><?= $rating->has('car') ? $this->Html->link($rating->car->id, ['controller' => 'Cars', 'action' => 'view', $rating->car->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Review') ?></th>
                    <td><?= h($rating->Review) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rating->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <?php
                     $a = $rating->rating;

                                if ($a == 1) {
                                    ?>
                                    <td>
                                        <span class="ratestars">
                                            <li class="star"><a><i class="fa-regular fa-star"></a></i></li>

                                        </span>
                                    </td>
                                <?php } else if ($a == 2) { ?>
                                        <td>
                                            <span class="ratestars">
                                                <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                <li class="star"><a><i class="fa-regular fa-star"></a></i></li>


                                            </span>
                                        </td>
                                <?php } else if ($a == 3) { ?>
                                            <td>
                                                <span class="ratestars">
                                                    <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                    <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                    <li class="star"><a><i class="fa-regular fa-star"></a></i></li>


                                                </span>
                                            </td>
                                <?php } else if ($a == 4) { ?>
                                                <td>
                                                    <span class="ratestars">
                                                        <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                        <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                        <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                        <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                    </span>
                                                </td>
                                <?php } else if ($a == 5) { ?>
                                                    <td>
                                                        <span class="ratestars">
                                                            <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                            <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                            <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                            <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                            <li class="star"><a><i class="fa-regular fa-star"></a></i></li>
                                                        </span>
                                                    </td>
                                <?php }
                                ?>

                
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($rating->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($rating->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($rating->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
