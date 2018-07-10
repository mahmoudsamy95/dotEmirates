<?php get_header() ?>

<div class="mainContent">
    <div class="gridContainer">

        <div class="oneSection">
            <div class="myrow clearfix">
                <?php
                if (have_posts()==1) {
                while (have_posts()) {
                the_post(); ?>
                <div class="mycol-lg-6">
                    <div class="mainPost big">
                        <div class="top">
                            <div class="img"><img src="<?= get_template_directory_uri(). '/images/source.jpg'?>" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div><?php the_time('F j, Y'); ?></div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="" class="bgCover" alt=""><?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'post image']); ?></a>
                        <div class="content">
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="description"><div class="in"><?php the_excerpt(); ?>
                                    <a href="<?php echo get_permalink(); ?>"> المزيد... </div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <?php
                                    if(!empty($theme_opts['twitter'])){
                                        ?> <a href="http://twitter.com/<?php echo $theme_opts['twitter']; ?>"><i class="icon-twitter"></i></a><?php
                                    }
                                    if(!empty($theme_opts['facebook'])){
                                        ?> <a href="http://facebook.com/<?php echo $theme_opts['facebook']; ?>"><i class="icon-facebook"></i></a<?php
                                    }
                                    if(!empty($theme_opts['telegram'])){
                                        ?> <a href="http://telegram.com/<?php echo $theme_opts['telegram']; ?>"><i class="icon-telegram"></i></a><?php
                                    }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php  }} ?>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost">
                        <div class="top">
                            <div class="img"><img src="<?= get_template_directory_uri(). '/images/source.jpg'?>" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img <?php the_post_thumbnail() ?>></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost">
                        <div class="top">
                            <div class="img"><img src="<?= get_template_directory_uri(). '/images/source.jpg'?>" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="oneSection">
            <div class="myrow clearfix">

                <div class="mycol-lg-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="widePost">
            <a href="#" class="avatar"><img src="images/3.jpg" class="bgCover" alt=""></a>
            <div class="content">
                <div class="in clearfix">
                    <div class="top">
                        <div class="img"><img src="images/source.jpg" alt=""></div>
                        <div class="data">
                            <div class="source">الإمارات اليوم</div>
                            <div>منذ دقيقة</div>
                        </div>
                    </div>
                    <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                    <div class="mainSocial pullLeft">
                        <a href="#"><i class="icon-telegram"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="oneSection">
            <div class="myrow clearfix">

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="oneSection">
            <div class="myrow clearfix">

                <div class="mycol-lg-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-6">
                    <div class="mainPost small">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="oneSection">
            <div class="myrow clearfix">

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-3 mycol-sm-6">
                    <div class="mainPost">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="widePost">
            <a href="#" class="avatar"><img src="images/4.jpg" class="bgCover" alt=""></a>
            <div class="content">
                <div class="in clearfix">
                    <div class="top">
                        <div class="img"><img src="images/source.jpg" alt=""></div>
                        <div class="data">
                            <div class="source">الإمارات اليوم</div>
                            <div>منذ دقيقة</div>
                        </div>
                    </div>
                    <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                    <div class="mainSocial pullLeft">
                        <a href="#"><i class="icon-telegram"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-facebook"></i></a>
                    </div>
                </div>
                <div class="playIcon"><i class="icon-arrow-dir-right"></i></div>
            </div>
        </div>

        <hr>

        <div class="oneSection">
            <div class="myrow clearfix">

                <div class="mycol-lg-6">
                    <div class="mainPost big">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mycol-lg-6">
                    <div class="mainPost big">
                        <div class="top">
                            <div class="img"><img src="images/source.jpg" alt=""></div>
                            <div class="data">
                                <div class="source">الإمارات اليوم</div>
                                <div>منذ دقيقة</div>
                            </div>
                        </div>
                        <a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
                        <div class="content">
                            <h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
                            <div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
                            <div class="sectionAndSocial clearfix">
                                <div class="section">العالم</div>
                                <div class="mainSocial pullLeft">
                                    <a href="#"><i class="icon-telegram"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <div class="textCentered mainPadding"><a href="#">المزيد ...</a></div>

    </div>
</div>
<?php get_footer() ?>

</body>
</html>

