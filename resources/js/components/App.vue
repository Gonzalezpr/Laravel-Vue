<template>
    <div>
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header__top__inner">
                                <div class="header__top__left">
                                    <ul>
                                        <li>USD <span class="arrow_carrot-down"></span>
                                            <ul>
                                                <li>EUR</li>
                                                <li>USD</li>
                                            </ul>
                                        </li>
                                        <li>ENG <span class="arrow_carrot-down"></span>
                                            <ul>
                                                <li>Spanish</li>
                                                <li>ENG</li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
                                    </ul>
                                </div>
                                <div class="header__logo">
                                    <router-link to="/"><img src="img/logo.png" alt=""></router-link>
                                </div>
                                <div class="header__top__right">
                                    <div class="header__top__right__links">
                                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                    </div>
                                    <div class="header__top__right__cart">
                                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                        <div class="cart__price">Cart: <span>$0.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="canvas__open"><i class="fa fa-bars"></i></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><router-link to="/">Home</router-link></li>
                                <li><router-link to="/about">About</router-link></li>
                                <li><router-link to="/shop">Shop</router-link></li>
                                <li><router-link to="/contact">Contact</router-link></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>

</style>
