# Laravel
Projeto em Laravel para estudar a framework
# Config
Siga os passos abaixo:

---

### **Clonar o Repositório**
Clone o repositório para sua máquina local:

```bash
git clone https://github.com/oivatO-soD-sotnaS/estudos.git
cd repo
```

---

### **1. Instalar Dependências do Composer**
Instale as dependências do Laravel com o Composer:
```bash
composer install
```

---

### **2. Configurar o Arquivo `.env`**
Crie o arquivo de configuração `.env` com base no exemplo:
```bash
cp .env.example .env
```

Edite o arquivo `.env` para configurar as credenciais do banco de dados e outras variáveis necessárias:
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=**seu_banco_de_dados**
DB_USERNAME=**seu_usuario**
DB_PASSWORD=**sua_senha**
```

---

### **3. Gerar a Chave da Aplicação**
Gere a chave de criptografia do Laravel:
```bash
php artisan key:generate
```

---

### **4. Migrar o Banco de Dados**
Execute as migrações para criar as tabelas no banco de dados:
```bash
php artisan migrate
```

Se o projeto inclui seeders para popular o banco de dados com dados iniciais:
```bash
php artisan db:seed
```

---

### **5. Configurar Permissões (se necessário)**
Certifique-se de que as pastas `storage` e `bootstrap/cache` têm permissão de escrita:
```bash
chmod -R 775 storage bootstrap/cache
```

---

### **6. Instalar Dependências do NPM (Frontend)**
Se o projeto utiliza assets frontend, instale as dependências do NPM:
```bash
npm install
npm run dev
```

---

### **7. Iniciar o Servidor de Desenvolvimento**
Inicie o servidor local do Laravel:
```bash
php artisan serve
```

Acesse o projeto em [http://localhost:8000](http://localhost:8000).

---

### **Passos Adicionais (se aplicável):**
- **Configurar filas ou jobs:** 
  Se o projeto utiliza filas, execute:
  ```bash
  php artisan queue:work
  ```

- **Configurar cache:** 
  Se o projeto utiliza cache:
  ```bash
  php artisan config:cache
  php artisan route:cache
  php artisan view:cache
  ```
