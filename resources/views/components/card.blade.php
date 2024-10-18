<!-- resources/views/components/card.blade.php -->
<div class="card">
    <header class="card-header">
        <p class="card-header-title">{{ $title }}</p>
    </header>
    <div class="card-content">
        <div class="content">
            {{ $slot }}
        </div>
    </div>
    <footer class="card-footer">
        <a href="#" class="card-footer-item">Edit</a>
        <a href="#" class="card-footer-item">Delete</a>
    </footer>
</div>
