<template>
    <header>
        <nav class="navbar">
            <div class="container">
                <h1 class="logo"><a href="#">RMJ</a></h1>
                <div class="nav nav-right">
                    <ul id="navlink">
                        <li><router-link :to="{name:'index'}"><a>Index</a></router-link></li>
                        <li><router-link :to="{name:'mobilList'}"><a>Daftar Mobil</a></router-link></li>
                        <li class="uwu wuw"><router-link :to="{name:'about'}"><a>About Us</a></router-link></li>
                    </ul>
                    <li class="toggle">
                        <a href="javascript:void(0);" class="icon" @click="showNav()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </div>
            </div>
        </nav>
    </header>
</template>
<script>
export default {
    methods: {
        showNav() {
            const listItems = document.querySelectorAll('.nav li');
            let ul = document.querySelector('#navlink');
            listItems.forEach(element => {
                if(element.className != "toggle") {
                    if(element.className == "showing") {
                        element.className = "";
                    } else {
                        element.className = "showing";
                    }
                }
            });
            if(ul.className == "showing") {
                ul.className = "";
            } else {
                ul.className = "showing";
            }
            
        }
    }
    
}
</script>
<style lang="scss" scoped>
    .navbar{
        height: auto;
        width: 95%;
        position: relative;
        padding: 20px 2.5%;
        background: #5c6bc0;
        box-shadow: 0px 0px 20px #555;
        .container{
            margin: 0 auto;
            width: 80%;
            .logo{
                color: #FFF;
            }
            .nav,.logo {
                display: inline-block;
            }
            .nav {
                ul {
                    list-style-type: none;
                    padding: 0;
                    margin-block-start: 0;
                    margin-block-end: 0;
                    margin-inline-start: 0;
                    margin-inline-end: 0;
                    padding-inline-start: 0;
                    li {
                        display: inline;
                        padding-left: 5px;
                        a {
                            color: #FFF;
                            text-decoration: none;
                            padding: 10px 20px;
                            transition: .5s;
                        }
                        a:hover{
                            background: #26418f;
                            color: #eee;
                            border-radius: 10px;
                            transition: .5s;
                        }
                    }
                }
            }
            .nav-right{
                float: right;
                margin: 0 auto;
            }
        }
    }
    @media screen and ( max-width: 600px) {
        .navbar {
            .container {
                .nav {
                    display: block;
                    .toggle {
                        list-style-type: none;
                        position: absolute;
                        top: 20px;
                        right: 20px;
                        a {
                            padding: 10px;
                            border-radius: 10px;
                            transition: .5s;
                        }
                        a:hover{
                            background: #26418f;
                            color: #eee;
                        }
                    }
                    ul{
                        margin-block-start: 0;
                        margin-block-end: 0;
                        margin-inline-start: 0;
                        margin-inline-end: 0;
                        padding-inline-start: 0;
                        padding: 5px;
                        display: none;
                        width: 100%;
                        li{
                            padding-left: 0;
                            padding: 5px;
                            a{
                                display: block;
                                padding: 5px;
                            }
                        }
                    }
                }
                .nav-right{
                    float: none;
                    margin: auto auto;
                }
            }
        }
    }
    @media screen and (min-width: 600px) {
        .navbar {
            .container {
                .nav {
                    .toggle {
                        display: none;
                    }
                }
            }
        }
    }
    .showing{
        display: block !important;
    }
</style>