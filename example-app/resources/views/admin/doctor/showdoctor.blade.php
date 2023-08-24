@include('admin.inc.head');
@include('admin.inc.aside');
@include('admin.inc.nav');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        section
        {
             position: relative;
             left: 50%
        }
    </style>
</head>
<body>
    <section>
        <article>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{$Doctors->image}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{$Doctors->title}}</h4>
                    <form action="{{ route('delete', $Doctors->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                    </form>

                </div>
            </div>
        </article>
    </section>
</body>
</html>
