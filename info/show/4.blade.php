<h2>基本情報</h2>
	<table class="table"> 
		<tr><td>氏名</td><td>：{{$base->info()->info["you1"]}}</td></tr>	
		<tr><td>性別</td><td>：{{$base->info()->info["you2"]}}</td></tr>			
		<tr><td>生年月日</td><td>：{{$base->info()->info["you3"]}}年  {{$base->info()->info["you4"]}}月  {{$base->info()->info["you5"]}}日</td></tr>	
		<tr><td>住所</td><td>：〒{{$base->info()->info["you6"]}}　　{{$base->info()->info["you7"]}}{{$base->info()->info["you8"]}}</td></tr>	
		<tr><td>電話番号</td><td>：{{$base->info()->info["you9"]}}</td></tr>	
		<tr><td>位置情報サービス</td><td>：{{$base->info()->info["you10"]}}</td></tr>		
	</table>

<h2>住まい</h2>	
	<table class="table">
		<tr><td>同居人の有無</td><td>：{{$base->info()->info["home1"]}}</td></tr>			
		<tr><td>最寄りの避難場所</td><td>：{{$base->info()->info["home2"]}}</td></tr>	
	</table>

