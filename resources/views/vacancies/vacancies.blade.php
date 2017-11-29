<div>
    @foreach(App\vacancy::getAll() as $v)
    <div style="margin-bottom: 20px" class="vacancy">
        <h4>{{ $v->HeadLine }}</h4>
        <small>{{ 'Location: ' . $v->Location . ' - ' . $v->Country }}</small>
        <a href="vacancies/{{ $v->Id }}">Read more</a>
    </div>
    @endforeach
</div>