# The web application displays information from the server.

My project on Docker Hub:
* $ docker pull vitaliy1303/web-app:latest

Used with helm in k8s:
Get the application URL by running these commands:

* $ helm install web-app ./web-app-chart --debug --dry-run

Get the application URL by running these commands:
  http://web-app.com/

The project also includes a declarative tool for continuous delivery to Kubernetes using the GitOps model.
Argo CD --version 5.24.0
* helm install argo-cd ./argo-cd -n argo-cd --create-namespace --dry-run
* kubectl port-forward service/argo-cd-argocd-server -n argo-cd 80:443
* kubectl -n argo-cd get secret argocd-initial-admin-secret -o jsonpath="{.data.password}" | base64 -d
* kapp -f web-app-argo-cd/app/web-app.yaml

![alt text](https://github.com/vitaliy-developer/info_from_the_hosts/blob/main/img101.png)
