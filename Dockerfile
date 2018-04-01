FROM ambientum/php:7.0-apache

# Add Node.js repo
RUN apt-get update && \
    apt-get install --no-install-recommends -y \
    curl \
    apt-transport-https \
    ca-certificates \
    gnupg2

RUN curl -s https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add -
RUN echo "deb https://deb.nodesource.com/node_8.x jessie main" > /etc/apt/sources.list.d/nodesource.list

# Install tools
RUN apt-get update && \
    apt-get install --no-install-recommends -y \
    openssh-client \
    bzip2 \
    git \
    php5-cli \
    nodejs && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/man/?? /usr/share/man/??_*

# Show versions
RUN php -v && \
    node -v && \
    npm -v

# Install node tools
RUN npm install -g yarn gulp && \
    yarn --version --allow-root && \
    gulp --version --allow-root
