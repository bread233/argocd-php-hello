# PHP Hello World for Argo CD Demo

这是一个简单的 PHP Hello World 应用，用于测试 Argo CD 自动化部署 (GitOps)。

## 结构
```
app/                 PHP 源码
k8s/deployment.yaml  K8s Deployment
k8s/service.yaml     NodePort Service
Dockerfile           构建镜像
```

## 构建镜像
```bash
docker build -t xmb233/argocd-php-hello:v1.0.0 .
docker push xmb233/argocd-php-hello:v1.0.0
```

## Argo CD Application 示例
```yaml
apiVersion: argoproj.io/v1alpha1
kind: Application
metadata:
  name: php-hello
  namespace: argocd
spec:
  project: default
  source:
    repoURL: https://github.com/bread233/argocd-php-hello.git
    targetRevision: main
    path: k8s
  destination:
    server: https://kubernetes.default.svc
    namespace: default
  syncPolicy:
    automated:
      prune: true
      selfHeal: true
```
