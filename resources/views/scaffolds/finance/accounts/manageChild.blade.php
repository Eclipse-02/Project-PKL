<ul>
    @foreach ($childs as $child)
        <li>
            @if (count($child->childs))
                <span id="icon"></span>
            @endif
            {{ $child->glacct_description }}
            @if (count($child->childs))
                @include('scaffolds.finance.accounts.manageChild', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>