

{{ $admin->name }}　{{$admin->branch}}様

{{ $user->name }}様が{{$product->name}}の購入をキャンセルしました。

商品
商品名：{{ $product->name }}
商品詳細：{{ $product->comment }}
消費期限：{{ $product->expiration_date }}
価格：{{ $product->price }}円
