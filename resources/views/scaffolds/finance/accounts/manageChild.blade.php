<ul>
    @foreach ($childs as $child)
        <li style="list-style-type:none">
            @if (count($child->childs))
                <i class="bi bi-arrow-right-short h3" aria-hidden="true"></i>
            @endif
            <button id="code" class="btn btn-sm btn-white mb-2" value="{{ $child->glacct_code }}" style="white-space: nowrap">{{ $child->glacct_code }} - {{ $child->glacct_description }}</button>
            @if (count($child->childs))
                @include('scaffolds.finance.accounts.manageChild', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>