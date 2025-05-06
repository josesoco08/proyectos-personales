import java.io.*;
import java.util.List;

public class GuardarResultados {
    public static void guardarCSV(List<String[]> resultados, String criterio, String termino) {
        String nombreArchivo = "resultados_" + criterio.toLowerCase() + "_" + termino.replaceAll(" ", "") + ".csv";
        try (BufferedWriter bw = new BufferedWriter(new FileWriter(nombreArchivo))) {
            for (String[] registro : resultados) {
                bw.write(String.join(",", registro));
                bw.newLine();
            }
            System.out.println("Archivo guardado como: " + nombreArchivo);
        } catch (IOException e) {
            System.err.println("Error al guardar el archivo: " + e.getMessage());
        }
    }
}
