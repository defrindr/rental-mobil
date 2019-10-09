<template>
    <section>
        <div class="footer">
            <div class="row">
                <div class="col-4">
                    <div class="foot-info">
                        <div class="brand">
                            <span class="name">Rental Mobil Jaya</span>
                            <span class="moto">Sukses bersama Rental Jaya</span>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="subs">
                        <form action="#">
                            <input type="email">
                            <submit><i class="fa fa-telegram"></i></submit>
                        </form>
                        <span class="title">Subcribe untuk mendapat info terbaru</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="alamat">
                        Jln. Kaki ke kiri lanjut belok kanan 10 langkah dari rumah , jangan berhenti ketika melihat lampu merah 
                    </div>
                </div>
        </div>
        </div>
        <footer>
            Alright Reserved &copy; <a>Rental Mobil Jaya</a>
        </footer>
    </section>
</template>
<script>
export default {
    
}
</script>
<style lang="scss" scoped>
    .footer{
        background: #242424;
        padding: 10px 10px 30px;
        .row{
            .col-4{
                .foot-info{
                    padding: 20px;
                    .brand{
                        .name{
                            display: block;
                            font-size: 24px;
                            color: #eee;
                        }
                        .moto{
                            font-size: 12px;
                            color: #aaa;
                        }
                    }
                }
            }
            .col-5{
                .subs{
                    padding: 20px;
                    .title{
                        display: block;
                        color: #aaa;
                        padding : 5px;
                    }
                    form{
                        padding: 5px;
                        display: inline-block;
                        border-radius: 10px;
                        background: #eee;
                        input{
                            background: transparent;
                            padding: 2px 5px;
                            border: 0;
                        }
                        input:focus{
                            outline: none !important;
                            box-shadow: none !important;
                            }
                        submit{
                            color: #5c6bc0;
                            width: 10%;
                        }
                    }
                }
            }
            .col-3{
                .alamat{
                    padding: 20px;
                    color: #aaa;
                }
            }
        }
    }
    footer{
        background: #5c6bc0;
        padding: 20px;
        text-align: center;
        border-style: solid;
        border-width: 5px 0 0;
        border-color: #343434;
    }
</style>