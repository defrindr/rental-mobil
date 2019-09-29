@if(isset($user))
				@method('PUT')
				@csrf
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" placeholder="ex@rental.com" required="required" value="{{ $user->email }}" />
				</div> <!-- ./email-->
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="username">User Name</label>
							<input type="text" name="username" class="form-control" minlength="5" placeholder="admin" required="required" value="{{ $user->username }}" />
						</div><!-- ./username-->
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12">
						<div class="form-group">
							<label for="password">Password</label> ( don't fill if password not to be change )
							<input type="password" name="password" class="form-control" placeholder="Password"/>
						</div><!-- ./password-->
					</div>
				</div>
				{{-- Button --}}
				<div style="text-align:right">
					<button type="submit" class="btn btn-success text-white btn-lg">Submit</button>
					<a class="btn btn-danger btn-close text-white btn-lg" onclick="goto(this);return 0" src="{{ route('user_index') }}">Cancel</a>
				</div>
@else
				@csrf
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" placeholder="ex@rental.com" required="required"/>
				</div> <!-- ./email-->
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-6">
						<div class="form-group">
							<label for="username">User Name</label>
							<input type="text" name="username" class="form-control" minlength="5" placeholder="admin" required="required"/>
						</div><!-- ./username-->
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12">
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password" required="required" />
						</div><!-- ./password-->
					</div>
				</div>
				{{-- Button --}}
				<div style="text-align:right">
					<button type="submit" class="btn btn-success text-white btn-lg">Submit</button>
					<a class="btn btn-danger btn-close text-white btn-lg" onclick="goto(this);return 0" src="{{ route('user_index') }}">Cancel</a>
				</div>
@endif