<template>
    <div>
		<my-header/>
		<div id="contents" class="container">
            <div class="header">
                <h3 class="title"><i class="fa fa-arrow-right"></i> {{ title }}</h3>
            </div>
            <div class="row">
                <section class="box-about">
                    <img :src="image" alt="about" class="img-responsive">
                    <div class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore animi porro at ad atque magni odio! Magni fuga vel corrupti ducimus iure! Magni vitae hic dolore velit, deserunt non dolores.
                    
                    </div>
                </section>
            </div>
        </div>
		<my-footer/>
	</div>
</template>
<script>
export default {
    components : {
        myHeader : () => import('./header.vue'),
        myFooter : () => import('./footer.vue')
    },
    data() {
        return {
            title: "About us",
            image: "/media/image/no-image.gif",
        }
    },
}
</script>
<style lang="scss">
	.box-about{
		background: #FFF;
		padding: 10px;
		border-radius: 10px;
        border: 1px solid #dadada;
        .img-responsive{
            text-align: center;
            width: 40%;
            height: auto;
            display: block;
            margin: 10px auto;
        }
        ::first-letter{
            font-size: 34px;
            padding-left: 30px;
        }
    }
    @media screen and (max-width: 600px) {
        .box-about{
            .img-responsive{
                text-align: center;
                width: 100%;
                height: auto;
            }
        }
    }
</style>