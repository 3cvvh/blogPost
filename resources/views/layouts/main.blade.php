<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom styles for sidebar -->
    <style>
        .sidebar {
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        
        .sidebar .nav-link {
            color: #333;
            padding: .5rem 1rem;
        }
        
        .sidebar .nav-link.active {
            color: #0d6efd;
            background-color: rgba(13,110,253,.1);
        }
        
        .sidebar .nav-link:hover {
            background-color: rgba(0,0,0,.05);
        }
        
        .sidebar .bi {
            margin-right: .5rem;
        }
    </style>
</head>
<body>
    @yield('content')
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
