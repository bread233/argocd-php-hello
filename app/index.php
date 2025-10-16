<?php
$version = "v1.0.1"; // 改这个版本号测试 ArgoCD 自动部署
echo "<h1>Hello from PHP on Kubernetes!</h1>";
echo "<p>Update: <strong>2025-10-16 9：00</strong></p>";
echo "<p>Version: <strong>$version</strong></p>";
echo "<p>Server Host: " . gethostname() . "</p>";
echo "<hr>";
echo "<p>Deployed automatically by <strong>Argo CD</strong> 🎉</p>";
?>