import java.util.List;

public class Main {
    public static void main(String[] args) {
        System.out.println("=== Programa de Búsqueda en Archivos ===");

        // Leer el archivo
        String archivoEntrada = "datos.csv";
        List<String[]> datos = LecturaArchivo.leerCSV(archivoEntrada);

        if (datos.isEmpty()) {
            System.out.println("El archivo está vacío o no se pudo leer.");
            return;
        }

        // Mostrar menú al usuario
        String criterio = MenuBusqueda.obtenerCriterioBusqueda();
        String termino = MenuBusqueda.obtenerTerminoBusqueda(criterio);

        // Filtrar los datos
        List<String[]> resultados = FiltroDatos.filtrarPorCriterio(datos, criterio, termino);

        if (resultados.isEmpty()) {
            System.out.println("No se encontraron resultados para el criterio dado.");
        } else {
            System.out.println("=== Resultados encontrados ===");
            resultados.forEach(registro -> System.out.println(String.join(", ", registro)));

            // Guardar los resultados en un archivo
            GuardarResultados.guardarCSV(resultados, criterio, termino);
            System.out.println("Resultados guardados exitosamente en un nuevo archivo.");
        }
    }
}
