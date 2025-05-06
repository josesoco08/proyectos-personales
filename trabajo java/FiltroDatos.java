import java.util.ArrayList;
import java.util.List;

public class FiltroDatos {
    public static List<String[]> filtrarPorCriterio(List<String[]> datos, String criterio, String termino) {
        List<String[]> resultados = new ArrayList<>();
        int indice = criterio.equals("Ciudad") ? 2 : 3;

        for (String[] registro : datos) {
            if (registro[indice].equalsIgnoreCase(termino)) {
                resultados.add(registro);
            }
        }
        return resultados;
    }
}
