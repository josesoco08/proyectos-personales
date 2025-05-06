import java.util.Scanner;

public class MenuBusqueda {
    public static String obtenerCriterioBusqueda() {
        Scanner sc = new Scanner(System.in);
        System.out.println("Seleccione un criterio de búsqueda:");
        System.out.println("1. Buscar por Ciudad");
        System.out.println("2. Buscar por Ocupación");
        System.out.print("Opción: ");
        int opcion = sc.nextInt();
        sc.nextLine(); 
        if (opcion == 1) return "Ciudad";
        else if (opcion == 2) return "Ocupación";
        else {
            System.out.println("Opción no válida.");
            return obtenerCriterioBusqueda();
        }
    }

    public static String obtenerTerminoBusqueda(String criterio) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Ingrese el término de búsqueda para " + criterio + ": ");
        return sc.nextLine();
    }
}
