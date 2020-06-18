@extends('layout')

@section('content')
    <div class="mb-32 text-gray-900 antialiased">
        <div class="bg-gray-100 pt-8 sm:pt-16 pb-8 mb-4">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl">better names</h1>
            </div>
        </div>
        <div class="container mx-auto px-4 mb-4 space-y-4">
            <p class="max-w-3xl">
                Git started with "master" as the default branch name.
                That doesn't mean we can't pick something better, or that
                it should be difficult to change from "master" to that better
                thing.
            </p>
            <p class="max-w-3xl">
                This website is a collection of tools you can use to find
                and use better names for Git branches. Click on a "connect" button.
                The permissions I request allow me to show you which public and
                private repos still have the name of a branch you want to change,
                and to rename these branches if you so choose.
            </p>
            <p class="max-w-3xl">
                It's obviously not a complete solution to dismantling systemic
                racism, but it's something.
            </p>
        </div>
        <div class="bg-gray-100 py-4 mb-4">
            <div class="container mx-auto px-4 space-y-4">
                <p class="max-w-3xl">
                    If you'd prefer a way to do this from the command-line,
                    you can try one of these:
                    <ol class="list-decimal mt-4 px-8">
                        <li>
                            <a href="https://pypi.org/project/rename-github-default-branch" class="text-blue-500 underline">rename-github-default-branch</a>
                            (Python)
                        </li>
                        <li>
                            <a href="https://gist.github.com/DamirPorobic/5be1a47d11c2c7444ddb171d19b4919e" class="text-blue-500 underline">DamirPorobic/rename-branch.sh</a>
                            (Bash)
                        </li>
                    </ol>
                </p>
            </div>
        </div>
        <div class="container mx-auto px-4 space-y-4">
            <livewire:show-github-repositories />
        </div>
        <div class="bg-gray-100 py-4 mb-4">
            <div class="container mx-auto px-4 space-y-4">
                <p class="max-w-3xl">
                    There are many things I want to add/change with this website:
                    <ol class="list-decimal mt-4 px-8">
                        <li>Better UX</li>
                        <li>Suggesting reading resources to motivate the change</li>
                        <li>Suggesting reading resources to learn about systemic racism</li>
                        <li>Listing BitBucket repos</li>
                        <li>Adding text file explaining the change to repos</li>
                        <li>Suggesting more alternatives</li>
                        <li>Opening up the source code (as soon as GitHub allows the anonymous account)</li>
                    </ol>
                </p>
                <p class="max-w-3xl">
                    I have intentionally chosen to do this anonymously. My opinion on this kind of change
                    is well known to those around me. <strong>It's not a change for me. It's a change I
                    believe is the right thing to do</strong>. Please don't try to figure out who I am.
                    I do not want that, and it's harmful to the message this website seeks to amplify.
                </p>
            </div>
        </div>
    </div>
@endsection
