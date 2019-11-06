<template>
    <section id="our-contact">
        <div class="head-title">
            Our Contact
        </div>
        <form action="" class="form">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="context" id="context" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button onclick="return false;" type="submit" class="btn">Submit</button>
                </div>
            </div>
        </form>
    </section>
</template>
<script>
export default {
    
}
</script>

<style lang="scss" scoped>

	#our-contact{
		background: #F9F9F9;
		padding: 10px;
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
        .form {
            display: block;
            .row{
                div{
                    .form-group{
                        position: relative;
                        padding: 5px 10px;
                        .form-control{
                            background: #fefefe;
                            border: 1px solid #aaa;
                            border-radius: 3px;
                            width:  100%;
                            display: block;
                            padding: 5px;
                        }
                    }
                    .btn{
                        display: block;
                        max-width: 60px;
                        margin: 0 auto;
                        background: #5c6bc0;
                        color: #eee;
                        padding: 8px;
                        border: 1px solid #aaa;
                        border-radius: 5px;
                    }
                }
            }
        }
	}
	@media screen and (max-width: 600px) {
		.unggul{
			.row {
				.col-3 > .item{
					border-left: 0px;
					border-top: 1px solid #aaa;
					min-height: auto;
				}
			}
		}
	}
</style>