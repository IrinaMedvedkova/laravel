@include('blocks/humberger')
@include('blocks/header')

    <!-- Categories Section Begin -->
    <section class="categories categories-grid spad">
        <div class="categories__post">
            <div class="container">
                <div class="categories__grid__post">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="breadcrumb__text">
                                <h2>Categories: <span>Recipes</span></h2>
                                <div class="breadcrumb__option">
                                    <a href="/">Home</a>
                                    <span>Recipes</span>
                                </div>
                            </div>
                            <div class="categories__list__post__item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="categories__post__item__pic set-bg"
                                            data-setbg="img/categories/categories-list/cl-1.jpg">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Recipe</span>
                                            <h3><a href="./singlepost">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                                gravida...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="categories__pagination">
                                        <a href="#">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

@include('blocks/footer')
