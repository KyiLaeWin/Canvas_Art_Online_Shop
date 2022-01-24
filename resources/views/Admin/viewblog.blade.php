@extends('Admin.master')

@section('content')
<div id="page-content">
		
		<!-- ////////////Content Box -->
		<section class="box-content-single">
			<div class="container">
				<div class="row heading">
					 <div class="col-lg-12">	
	                    <h2 class="single-header">{{$blog->title
	                    }}</h2>
	                    
	                </div>
				</div>
				<div class="row">
					<div class="art-header" style='width:550px;margin:0 auto;padding-bottom: 30px;'>
						<img src="{{url('/images/'.$blog->image)}}" />
					</div>
				
					<p style="white-space: pre-wrap;width:800px;margin:0 auto;padding-bottom: 60px;">{{$blog->body}}</p>
					
					
				</div>
			</div>
		</section>
	
	</div>
@endsection