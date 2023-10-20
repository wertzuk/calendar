import { ref } from 'vue';
const API_URL = 'http://localhost:8000/api';

export function useTournaments() {
  const data = ref(null);
  const error = ref(null);

  fetch(`${API_URL}/tournaments`)
    .then((res) => res.json())
    .then((json) => (data.value = json))
    .catch((err) => (error.value = err));

  console.log(data.value);
  return { data, error };
}

// export async function useTournaments() {
//   const data = ref(null);
//   const error = ref(null);

//   const response = await fetch(`${API_URL}/tournaments`);
//   data.value = await response.json();
//   console.log(data.value);

//   return { data, error };
// }
