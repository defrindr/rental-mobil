<template>
    
    <section class="testimoni">
		<div class="head-title">
			<span>Testimoni</span>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="item">
                    <div class="col-2">
                        <div class="people">
                            <div class="icon"><i class="fa fa-user-secret"></i></div>
                            <div class="people-name">Defri</div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="testimoni-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                        </div>
                    </div>
				</div>
			</div>
			<div class="col-12">
				<div class="item">
                    <div class="col-2">
                        <div class="people">
                            <div class="icon"><i class="fa fa-user-secret"></i></div>
                            <div class="people-name">Defri</div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="testimoni-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                        </div>
                    </div>
				</div>
			</div>
			<div class="col-12">
				<div class="item">
                    <div class="col-2">
                        <div class="people">
                            <div class="icon"><i class="fa fa-user-secret"></i></div>
                            <div class="people-name">Defri</div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="testimoni-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, perferendis ea quam suscipit nihil in aperiam et velit tempore aliquam blanditiis quo. Ad commodi repudiandae voluptate culpa, blanditiis fuga voluptates?
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
export default {
    
}
</script>
<style lang="scss" scoped>
	.testimoni{
        margin: 20px 0;
		background: #FFF;
		padding: 10px;
		border-radius: 10px;
		border: 1px solid #dadada;
		.head-title{
			span{
				display: inline-block;
				border-bottom: 2px solid #5c6bc0;
				padding: 0 10px;
			}
			text-align: center;
			font-size: 24px;
			margin: 0 0 30px;
			color: #5c6bc0;
		}
		.row {
			.col-12 > .item{
                position: relative;
				padding: 10px;
                .col-2 {
                    .people {
                        text-align: center;
                        .people-name{
                            font-size: 18px;
                            color: #5c6bc0;
                        }
                        .icon{
                            font-size: 48px;
                            color: #5c6bc0;
                        }
                    }
                }
				.col-10 {
                    .testimoni-desc {
                        background: #FFF;
                        border: 1px solid #aaa;
                        border-radius: 10px;
                        padding: 10px;
                        color: #555;
                        text-align: center;
                    }
                }
			}
		}
	}
	@media screen and (max-width: 600px) {
		.testimoni{
			.row {
				.col-12 > .item{
                    .col-2{
                        .people{
                            padding: 10px 0;
                        }
                    }
                    .col-10{
                        .testimoni-desc{
                            position: relative;
                        }
                        .testimoni-desc::before{
                            content: "";
                            position: absolute;
                            top: -20px;
                            left: 47%;
                            width: 0;
                            height: 0;
                            border-width: 10px;
                            border-style: solid;
                            border-color: transparent transparent #aaa transparent;
                        }
                    }
				}
			}
		}
	}

	@media screen and (min-width: 600px) {
		.testimoni{
			.row {
				.col-12 > .item{
                    .col-10{
                        .testimoni-desc{
                            position: relative;
                        }
                        .testimoni-desc::before{
                            content: "";
                            position: absolute;
                            top: 15px;
                            left: -20px;
                            width: 0;
                            height: 0;
                            border-width: 10px;
                            border-style: solid;
                            border-color: transparent #aaa transparent transparent;
                        }
                    }
				}
			}
		}
	}
</style>