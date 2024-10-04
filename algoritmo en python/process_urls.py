def process_urls(file_path):
    unique_urls = set()  # Almacena URLs únicas
    count = 0  # Contador de URLs que cumplen los criterios

    with open(file_path, 'r') as file:  # Abre el archivo en modo de solo lectura
        for line in file:  # Lee el archivo línea por línea
            url = line.strip()  # Elimina espacios en blanco de los extremos
            # Filtra URLs que contienen "shop" y terminan en ".html"
            if "shop" in url and url.endswith(".html"):
                if url not in unique_urls:  # Si la URL no está ya en el set
                    unique_urls.add(url)  # Agregar URL al set
                    count += 1  # Incrementar el contador

    return count, unique_urls  # Devolver el conteo y el conjunto de URLs

# Ejecución del programa
if __name__ == "__main__":
    file_path = 'urls.txt'  # Ruta del archivo de URLs
    count, urls = process_urls(file_path)  # Llama a la función para procesar el archivo
    print(f"Total URLs que cumplen con los criterios: {count}")
    print("URLs encontradas:")
    for url in urls:
        print(url)
