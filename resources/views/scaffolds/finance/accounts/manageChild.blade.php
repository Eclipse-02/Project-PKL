<ul>
    @foreach ($childs as $child)
        <li style="white-space: nowrap">
            @if (count($child->childs))
                <i class="ni ni-bold-right" aria-hidden="true"></i>
            @endif
            <button id="code" value="{{ $child->glacct_code }}">{{ $child->glacct_code }} - {{ $child->glacct_description }}</button>
            @if (count($child->childs))
                @include('scaffolds.finance.accounts.manageChild', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>